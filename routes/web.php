<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ClientViewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\EmergencyNumberController;
use App\Http\Controllers\PrayController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\YouthController;
use App\Http\Controllers\PostLikesController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSlideImageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopOwnerController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AdminTeamMemberController;
use App\Http\Controllers\InfoVillageController;
use App\Http\Controllers\VillageInfoController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::middleware(['auth'])->group(function () {
  Route::get('youth',[YouthController::class, 'index'])->name('youth.index');
        Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

        // Likes and Comments
        Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('posts.comments.store');
        Route::post('post/{post:id}/likes', [PostLikesController::class, 'store'])->name('posts.like');
        Route::delete('post/{post}/likes', [PostLikesController::class, 'destroy'])->name('posts.like');
        Route::delete('posts/post/{postid}/destroy',[CommentController::class,'delete'])->name('comment.delete');

        // MyProfile Controller
        Route::get('profile', [MyProfileController::class, 'index'])->name('profile.index');
        Route::get('profile/{id}/edit', [MyProfileController::class, 'edit'])->name('profile.edit');
        Route::put('profile/{user}', [MyProfileController::class, 'update'])->name('profile.update');
        Route::get('profile/{id}', [MyProfileController::class, 'show'])->name('profile.show');

       
        // public announcement
        Route::get('/all-announcement', [AnnouncementController::class, 'publicAnnouncement'])->name('public.announcements.index');

        Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcements.index');
        Route::post('/announcement', [AnnouncementController::class, 'store'])->name('announcements.store');
        Route::get('/announcement/create/new', [AnnouncementController::class, 'create'])->name('announcements.create');
        Route::get('/announcement/{announcement}', [AnnouncementController::class, 'show'])->name('announcements.show');
        Route::get('/announcement/{announcement}/edit', [AnnouncementController::class, 'edit'])->name('announcements.edit');
        Route::put('/announcement/{announcement}', [AnnouncementController::class, 'update'])->name('announcements.update');
        Route::delete('/announcement/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');

          // Shops for public 
        Route::get('/public/view/shops/all', [ShopController::class, 'publicShops'])->name('public.shops.index');
        Route::get('/public/shops/{id}/products', [ShopController::class, 'shopProducts'])->name('public.shops.products.index');
        Route::get('/public/shops/products', [ProductController::class, 'compare'])->name('public.shops.products');
         // Shops for shop owners
         Route::get('/shops', [ShopController::class, 'index'])->name('shops.index')->middleware('can:shop-owner');
         Route::post('/shops', [ShopController::class, 'store'])->name('shops.store')->middleware('can:shop-owner');
         Route::get('/shops/create', [ShopController::class, 'create'])->name('shops.create')->middleware('can:shop-owner');
         Route::put('/shops/{id}', [ShopController::class, 'update'])->name('shops.update')->middleware('can:shop-owner');
         Route::delete('/shops/delete/{id}', [ShopController::class, 'destroy'])->name('shops.delete')->middleware('can:shop-owner');
        // Product  routes here  for Shop-owners 
         Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware('can:shop-owner');
         Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('can:shop-owner');
         Route::post('/products', [ProductController::class, 'store'])->name('products.store')->middleware('can:shop-owner');
         Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show')->middleware('can:shop-owner');
         Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('can:shop-owner');
         Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('can:shop-owner');
         Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('can:shop-owner');
         
              // });

            Route::get('/client-views', [ClientViewController::class, 'index'])->name('client.view.index');
            Route::get('/client-views/{id}', [ClientViewController::class, 'show'])->name('client.view.show');
            Route::post('/client-views', [ClientViewController::class, 'store'])->name('client.view.store');

            // indexes
            Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
            Route::get('/ourposts', [PostsController::class, 'index'])->name('posts.allposts');
            Route::get('posts-read/{post}', [PostsController::class, 'findOne'])->name('posts.findOne');
            Route::get('comment/{id}', [CommentController::class, 'showUser'])->name('comment.owner');
            Route::get('/about', [AboutUsController::class, 'index'])->name('about');
            Route::get('question', [PriceController::class, 'index'])->name('question.index');
            Route::get('/people', [PeopleController::class, 'index'])->name('people.index');
            Route::get('/people/show/{id}', [PeopleController::class, 'show'])->name('people.show');
            Route::get('/emergency-numbers', [EmergencyNumberController::class, 'index'])->name('emergency.index');
            Route::get('/pray-time', [PrayController::class, 'index'])->name('pray.index');
            Route::get('/team', [TeamController::class, 'index'])->name('team.index');
    
            // Shop  route here 
            Route::get('/products', [ProductController::class, 'index'])->name('products.index');
            Route::post('/products', [ProductController::class, 'store'])->name('products.store');
            Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
            Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
            Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');    
    
           Route::get('/home', [HomeController::class, 'index'])->name('home');
  });

      

// Super Admin Routes
Route::middleware('can:super-admin')->group(function () {
        Route::get('super-admin-users/{id}/edit', [AdminUsersController::class, 'edit'])->name('admin.user.edit');
        Route::get('super-admin-users/user/{id}/view', [AdminUsersController::class, 'show'])->name('admin.user.view');
        Route::put('super-admin-update-user/{user}', [AdminUsersController::class, 'update'])->name('admin.user.update');
        Route::delete('admin-delete/{id}/delete', [AdminUsersController::class, 'delete'])->name('admin.user.delete');
        Route::delete('admin-contact-delete/{id}/delete', [AdminContactController::class, 'delete'])->name('admin.contact.delete');

        // Admin Posts
        Route::get('admin-posts', [AdminPostController::class, 'index'])->name('posts.index');
        Route::get('admin-post-create', [AdminPostController::class, 'create'])->name('posts.create.index');
        Route::delete('adminPostDelete/{id}', [AdminPostController::class, 'destroy'])->name('post.delete');
        Route::post('admin-posts', [AdminPostController::class, 'store'])->name('posts.create');
        Route::get('admin-post-edit/{id}/edit', [AdminPostController::class, 'edit'])->name('posts.edit');
        Route::put('admin-post-update/{id}', [AdminPostController::class, 'update'])->name('posts.update');

        // Slide Images
        Route::get('slide', [AdminSlideImageController::class, 'index'])->name('slide.index');
        Route::get('slide-create', [AdminSlideImageController::class, 'create'])->name('slide.create');
        Route::post('slide-store', [AdminSlideImageController::class, 'store'])->name('slide.store');
        Route::delete('slide-delete/{id}', [AdminSlideImageController::class, 'delete'])->name('slide.delete');

        // Admin Users
        Route::get('admin-users', [AdminUsersController::class, 'index'])->name('admin.user.index');
        Route::get('admin-users/{id}', [AdminUsersController::class, 'show'])->name('admin.user.show');
        Route::put('admin-users/update/{id}', [AdminUsersController::class, 'changeStatus'])->name('admin.user.update');

        // Admin Contact
        Route::get('admin-contact', [AdminContactController::class, 'index'])->name('admin.contact.index');
        Route::get('admin-contacts/{id}/edit', [AdminContactController::class, 'show'])->name('admin.contact.show');
        
        // Shop owner Route::get('/shop-owners', [ShopOwnerController::class, 'index'])->name('shop_owners.index');
        Route::get('/admin-shop-owners/all', [ShopOwnerController::class, 'index'])->name('admin.shop-owners.index');
        Route::get('/admin-shop-owners/create', [ShopOwnerController::class, 'create'])->name('admin.shop-owners.create');
        Route::post('/admin-shop-owners', [ShopOwnerController::class, 'store'])->name('admin.shop-owners.store');
        Route::get('/admin-shop-owners/{id}', [ShopOwnerController::class, 'show'])->name('admin.shop-owners.show');
        Route::put('/admin-shop-owners/{id}', [ShopOwnerController::class, 'update'])->name('admin.shop-owners.update');
        Route::delete('/admin-shop-owners/{id}', [ShopOwnerController::class, 'destroy'])->name('admin.shop-owners.delete');
        // admin.team.members.store
        // Routes for create team members 

        Route::get('/admin/team', [AdminTeamMemberController::class, 'index'])->name('admin.team.index');
        Route::get('/admin/team/create', [AdminTeamMemberController::class, 'create'])->name('admin.team.create');
        Route::post('/admin/store/team', [AdminTeamMemberController::class, 'store'])->name('admin.team.store');
        // Route::get('/admin/team/{teamMember}', [AdminTeamMemberController::class, 'show'])->name('admin.team.show');
        // Route::get('/admin/team/{teamMember}/edit', [AdminTeamMemberController::class, 'edit'])->name('admin.team.edit');
        Route::put('/admin/team/{id}', [AdminTeamMemberController::class, 'update'])->name('admin.team.update');
        // Route::delete('/admin/team/{teamMember}', [AdminTeamMemberController::class, 'destroy'])->name('admin.team.destroy');
        // Route::post('/admin-team-members/create', [ShopOwnerController::class, 'store'])->name('admin.shop-owners.store');


        Route::get('/village-infos', [VillageInfoController::class, 'index'])->name('village_infos.index');

        Route::get('/village-infos/create', [VillageInfoController::class, 'create'])->name('village_infos.create');

        Route::post('/village-infos', [VillageInfoController::class, 'store'])->name('village_infos.store');

        Route::get('/village-infos/{id}/edit', [VillageInfoController::class, 'edit'])->name('village_infos.edit');

        Route::put('/village-infos/{id}', [VillageInfoController::class, 'update'])->name('village_infos.update');

        Route::delete('/village-infos/{id}', [VillageInfoController::class, 'destroy'])->name('village_infos.destroy');


        // for addtional information 
        Route::get('/info_villages', [InfoVillageController::class, 'index'])->name('info_villages.index');
        Route::get('/info_villages/create', [InfoVillageController::class, 'create'])->name('info_villages.create');
        Route::post('/info_villages', [InfoVillageController::class, 'store'])->name('info_villages.store');
        Route::get('/info_villages/{id}', [InfoVillageController::class, 'show'])->name('info_villages.show');
        Route::get('/info_villages/{id}/edit', [InfoVillageController::class, 'edit'])->name('info_villages.edit');
        Route::put('/info_villages/{id}', [InfoVillageController::class, 'update'])->name('info_villages.update');
        Route::delete('/info_villages/{id}', [InfoVillageController::class, 'destroy'])->name('info_villages.destroy');




});

Route::middleware('can:owner')->group(function(){       
        Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
        Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create');
        Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
        Route::get('/admins/{id}', [AdminController::class, 'show'])->name('admins.show');
        Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('admins.edit');
        Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admins.update');
        Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');
   });
