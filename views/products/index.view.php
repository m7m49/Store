<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>
    <?php if ($_SESSION['user'] ?? false) : ?>
      <a href = "/products/create" class = "inline-block text-black-500 border border-current px-3 py-2 rounded hover:bg-green-500" style="margin-bottom: 50px;">Add a New Product</a>
    <?php endif ?>  
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <?php foreach ($products as $product) : ?>
        <div class="group">
        <?php if ($_SESSION['user'] ?? false) : ?>
          <a href = "/product/edit?id=<?= $product['id'] ?>" class = "text-black-500 border border-current px-3 py-2 rounded hover:bg-sky-500">Edit</a>
          <form class = "inline" method="POST" action='/product'>
            <input type = 'hidden' name= '_method' value = "DELETE">
            <input type = 'hidden' name= 'id' value = "<?= $product['id'] ?>" >
            <button class = "text-black-500 border border-current px-3 py-2 rounded hover:bg-red-700" style="margin-left: 150px; margin-bottom: 10px">Delete</button>
          </form> 
          
        <?php endif ?>  
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src=<?= htmlspecialchars($product['imgUrl']) ?> alt=<?= htmlspecialchars($product['alt']) ?> class="h-full w-full object-cover object-center group-hover:opacity-75" style="height: 300px;">
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><?= htmlspecialchars($product['name']) ?></h3>
          <p class="mt-1 text-lg font-medium text-gray-900"><?= htmlspecialchars($product['price']) ?></p>
        </div>  
      <?php endforeach ?>
    </div>
</div>

<?php require base_path('views/partials/footer.php') ?>