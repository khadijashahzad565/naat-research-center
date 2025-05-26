<?php
/**
 * Template Name: Articles
 */
get_header(); 
?>

<!-- Articles Hero Section -->
<section class="naat-articles-section">
  <div class="container naat-articles-content text-center">
    <h1>Explore Our Articles</h1>
    <p>Insightful Writings, Analyses, and Reflections on the Tradition and Evolution of Naat</p>
  </div>
</section>

<!-- Articles Table Section -->
<div class="container mt-5">
  <h2 class="mb-3">Articles</h2>

  <!-- Controls: Entries & Search -->
  <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">
    <div class="d-flex align-items-center gap-2">
      <label for="entriesSelect" class="mb-0">Show</label>
      <select class="form-select form-select-sm" id="entriesSelect">
        <?php foreach ([5, 10, 25, 50, 100] as $num): ?>
          <option value="<?= $num ?>" <?= $num == 100 ? 'selected' : '' ?>><?= $num ?></option>
        <?php endforeach; ?>
      </select>
      <span>entries</span>
    </div>
    <div class="input-group input-group-sm w-100 w-md-auto">
      <span class="input-group-text"><i class="bi bi-search"></i></span>
      <input type="text" class="form-control" id="tableSearch" placeholder="Search articles...">
    </div>
  </div>

  <!-- Articles Table -->
  <div class="table-responsive shadow-sm rounded">
    <table class="table table-striped table-hover mb-0" id="articlesTable">
      <thead class="table-secondary">
        <tr>
          <th>Article</th>
          <th>Views</th>
          <th>Published At</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $args = [
          'post_type' => 'articles',
          'posts_per_page' => -1,
        ];
        $query = new WP_Query($args);

        if ($query->have_posts()):
          while ($query->have_posts()): $query->the_post();
            $article_title = get_field('title');
            $article_desc  = get_field('description');
            $article_views = get_field('number');
            $article_date  = get_field('date');
        ?>
        <tr>
          <td>
            <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?= esc_html($article_title); ?></a>
            <p class="text-muted small mb-0"><?= esc_html($article_desc); ?></p>
          </td>
          <td><?= esc_html($article_views); ?></td>
          <td><em><?= esc_html($article_date); ?></em></td>
        </tr>
        <?php
          endwhile;
          wp_reset_postdata();
        else:
        ?>
        <tr>
          <td colspan="3" class="text-center">No articles found.</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Pagination Info & Controls -->
  <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mt-4 pb-5">
    <div class="text-muted mb-3 mb-sm-0">
      Showing <span id="showingCount">1 to 6</span> of <span id="totalCount">6</span> entries
    </div>
    <ul class="pagination pagination-sm mb-0" id="tablePagination"></ul>
  </div>
</div>

<?php get_footer(); ?>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Article Table Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const rows = document.querySelectorAll('#articlesTable tbody tr');
  const perPageSelect = document.getElementById('entriesSelect');
  const searchInput = document.getElementById('tableSearch');
  const pagination = document.getElementById('tablePagination');
  const showingCount = document.getElementById('showingCount');
  const totalCount = document.getElementById('totalCount');

  let currentPage = 1;

  function filterRows() {
    const search = searchInput.value.toLowerCase();
    return Array.from(rows).filter(row =>
      row.textContent.toLowerCase().includes(search)
    );
  }

  function showRows(filteredRows) {
    const perPage = parseInt(perPageSelect.value);
    const total = filteredRows.length;
    const totalPages = Math.ceil(total / perPage);
    if (currentPage > totalPages) currentPage = totalPages;

    const start = (currentPage - 1) * perPage;
    const end = start + perPage;

    rows.forEach(row => row.style.display = 'none');
    filteredRows.slice(start, end).forEach(row => row.style.display = '');

    showingCount.textContent = `${start + 1} to ${Math.min(end, total)}`;
    totalCount.textContent = total;

    renderPagination(totalPages);
  }

  function renderPagination(totalPages) {
    pagination.innerHTML = '';

    if (currentPage > 1) {
      pagination.appendChild(createPageButton('«', currentPage - 1));
    }

    for (let i = 1; i <= totalPages; i++) {
      pagination.appendChild(createPageButton(i, i, i === currentPage));
    }

    if (currentPage < totalPages) {
      pagination.appendChild(createPageButton('»', currentPage + 1));
    }
  }

  function createPageButton(text, page, isActive = false) {
    const li = document.createElement('li');
    li.className = 'page-item' + (isActive ? ' active' : '');
    const a = document.createElement('a');
    a.href = '#';
    a.className = 'page-link';
    a.textContent = text;
    a.addEventListener('click', e => {
      e.preventDefault();
      currentPage = page;
      updateTable();
    });
    li.appendChild(a);
    return li;
  }

  function updateTable() {
    const filtered = filterRows();
    showRows(filtered);
  }

  perPageSelect.addEventListener('change', () => {
    currentPage = 1;
    updateTable();
  });

  searchInput.addEventListener('input', () => {
    currentPage = 1;
    updateTable();
  });

  updateTable(); // Initialize
});
</script>
