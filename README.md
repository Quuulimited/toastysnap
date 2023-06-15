# ToastySnap
## Obscure hobbies, now with extra crunch

This repo is used for the Quuu Job application process. You will need to follow the instructions below and once completed, reach out to us.

ToastySnap is a brand new social media that is taking the toast world by storm (supposedly!) The application is in a "bare-bones state" meaning that whilst some core elements have been created you will need to finish the site off ready for prime-time 🍞

If during this test you have any questions, please reach out to your contact at Quuu. Good luck and may your bread be unburnt 😊

## Tasks to complete
1. Fork this repo and ensure it's publically available. You'll work on this copy throughout the test
2. Deploy, and setup the application to your local environment. Ensure the site can be accessed locally in PHP 8.2, Install composer packages, setup a database and run migrations, setup an Application key and read the [Cooker documentation](https://github.com/genericmilk/cooker) to get the frontend resources made available.
3. Using artisan tinker, create a new user account.
4. Login to your new user account
5. Create some new Toast uploads in the `toasts` table. These should be a mixture of `public` and `private` toasts as we want to display some content in both the user's account and in the "Gallery". There is some high quality toast images in `/public/toast` for you to get started with, Reference these as absolute paths in the database, so that it doesn't matter what domain the site is running from later.
6. Create a relationship between the `Toast` model and the `User` model and vice-versa. This will be used later looking up a user's toasts and who the toast belongs to in the "Gallery"
7. Using cooker, Install the `axios` package. We'll use this for performing an ajax request for loading toast items inline
8. Create a `POST` route in the `ToastController` that'll take a page parameter and load all `public` toasts from the database. Load 9 toasts at a time. Don't forget to register this as a route! You can accept page number as a route parameter or a post parameter. The output of this function should load `uikit.toast` which contains a `foreach` loop of `$toasts`. Ensure you pass the collection as `$toasts` to the view in your controller function.
9. Using `resources/js/app.js` extend the `app.gallery.loadToasts` function to make an axios POST call to your new controller function. This function should append the output of your request to the "Gallery" page in the `#galleryStage` container. 
10. Add either a button outside of `#galleryStage` that allows the user to load more toasts, or allow the user to scroll to load more toasts.
11. Using `uikit.toast` make a basic design for each toast listing, we're not looking for the world here, just something that fits in with the design of the app. If you'd like to see available colours for the colour sheet, See `/resources/less/uikit/color.less`. Whilst working in LESS use the command `php artisan cooker:watch` to ensure changes made rebuild the app's resources. The toast items should contain the toast image, the title of the toast, how long ago it was uploaded and who uploaded the toast (Their user name)
12. Make sure the function `app.gallery.loadToasts()` boots when the user is on the gallery page. You could do this via attribute or looking at the currently loaded page (Tip, there is a class of logged-in and logged-out in the body class 👀)
12. Create a copy of your gallery system to load on the `/me` page. This should work exactly the same as the "Gallery" page, this time loading the toasts into `#meStage` however each post should also come with a "Delete" button as well as a "Toggle Private/Public" button that allows users to set toasts public / private. Only the user's toasts should be visible on `/me` and both `public` and `private` toasts should be visible here. Requests to delete toasts or set them public/private should ask confirmation using `confirm()` and also run an inline function.
13. Finally make a simple image upload form that allows the user to upload an image of their toasts to their account. This doesn't need to be AJAX to keep it simple, but needs to accept only `*.jpg`, `*.jpeg` and `*.png` files. Storage can be done in the `/public/toast` folder, and freshly uploaded toasts need to have a corresponding new Toast record created and be set to a permission of `private` by default.
14. Last but not least, fix the `/logout` route in the upper right. This route only accepts `POST` currently, but can you make it available via `GET`? 👀

## Sending this to us
When you're ready to send things over to us, make sure you take a dump of your database and store it as either `database.sql` or compressed as `database.tar.gz` in the root of your project file. Then make sure your repo is public so we can see it and send over the link! We'll go over it and ask you some questions. Good luck!

## Bonus bits
If you're feeling hungry for more and want to really stand out above the rest, we're looking for ways you might want to improve ToastySnap. This is up to your own initiative but we've got some good ones to wet your tastebuds:

1. The images stored are really high res and will take a long time to load in browser and take up more storage than needed. Is there a way you could compress images once uploaded? 👀
2. A social network about toasts would be really cool with some discussion, Could our users leave reviews?
3. A dark theme would be really good for after dark toasting, Could you add a `LESS` file to `config/cooker.php` which customises the site when the user is operating in dark mode?
4. Cookies are not toast, Could you make a middleware that protects the site from users who have an `is_banned` bool of true against their user account?