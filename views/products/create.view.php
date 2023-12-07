<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form method="POST" action='/products'>
                <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
                    <div class="mt-2 mb-10">
                        <textarea id="name" name="name" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['name'] ?? '' ?></textarea>
                        <?php if (isset($errors['name'])): ?>
                            <p class = "text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
                        <?php endif; ?>    
                    </div>    

                    <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Product Price</label>
                    <div class="mt-2 mb-10">
                        <textarea id="price" name="price" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['price'] ?? '' ?></textarea>
                        <?php if (isset($errors['price'])): ?>
                            <p class = "text-red-500 text-xs mt-2"><?= $errors['price'] ?></p>
                        <?php endif; ?>    
                    </div> 

                    <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Product Image URL (Link)</label>
                    <div class="mt-2 mb-10">
                        <textarea id="imgUrl" name="imgUrl" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['imgUrl'] ?? '' ?></textarea>
                        <?php if (isset($errors['imgUrl'])): ?>
                            <p class = "text-red-500 text-xs mt-2"><?= $errors['imgUrl'] ?></p>
                        <?php endif; ?>    
                    </div> 

                    <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Product Image Description</label>
                    <div class="mt-2 mb-10">
                        <textarea id="alt" name="alt" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['alt'] ?? '' ?></textarea>
                        <?php if (isset($errors['alt'])): ?>
                            <p class = "text-red-500 text-xs mt-2"><?= $errors['alt'] ?></p>
                        <?php endif; ?>    
                    </div> 

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button href = "/products" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button
                                type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                                Save
                            </button>
                    </div>
                </div>    
            
        </form>
    </div>
</main>
  <?php require base_path('views/partials/footer.php') ?>