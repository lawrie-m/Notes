<?php require('partials/nav/head.php') ?>
<?php require('partials/nav/nav.php') ?>
<?php require('partials/nav/banner.php') ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>. Welcome to the Home Page </p>
    </div>
  </main>

  <?php require('partials/nav/footer.php') ?>