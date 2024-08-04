<?php require('views/partials/head.php') ?>
<?php require('views/partials/navbar.php') ?>

<!-- main -->
<main class="flex-grow">
    <div class="max-w-3xl mx-auto py-6">

        <a class="link link-primary text-center w-full block" href="/blogs">All blogs</a>

        <a class="btn btn-error btn-sm" href="/blogs/edit?id=<?= $blog['id'] ?>">Edit Blog</a>

        <h2 class="text-center text-xl font-semibold text-gray-900 mt-6"><?= $blog['title'] ?></h2>
        <p class="mt-4 text-gray-700 font-normal"><?= $blog['body'] ?></p>

        <!-- <a href="/blog?id=<?= $blog['id'] ?>">Delete</a> -->

        <form class="mt-6" method="POST">
            <input type="hidden" name="id" value="<?= $blog['id'] ?>">
            <button type="submit" class=" text-sm text-red-500">Delete</button>
        </form>
    </div>
</main>

<?php require('views/partials/footer.php') ?>