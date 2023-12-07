<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST" action='/product'>
            <input type = 'hidden' name= '_method' value = "PATCH">
            <input type = 'hidden' name= 'id' value = "<?= $product['id'] ?>" >
        
                <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
                    <div class="mt-2 mb-10">
                        <textarea id="name" name="name" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $product['name'] ?? '' ?></textarea>
                        <?php if (isset($errors['name'])): ?>
                            <p class = "text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
                        <?php endif; ?>    
                    </div>    

                    <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Product Price</label>
                    <div class="mt-2 mb-10">
                        <textarea id="price" name="price" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $product['price'] ?? '' ?></textarea>   
                    </div> 

                    <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Product Image URL (Link)</label>
                    <div class="mt-2 mb-10">
                        <textarea id="imgUrl" name="imgUrl" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $product['imgUrl'] ?? '' ?></textarea>  
                    </div> 

                    <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Product Image Description</label>
                    <div class="mt-2 mb-10">
                        <textarea id="alt" name="alt" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $product['alt'] ?? '' ?></textarea>   
                    </div> 

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href = "/products" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>
                </div>    
            
        </form>
    </div>
</main>
  <?php require base_path('views/partials/footer.php') ?>