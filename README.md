#Usage Instructions for emucaplab.com

##Date

  7/16/15

##Author

  Tara Safavi

##Adding Posts

  To add a post, go to the "Posts" link in the left navigation panel and
  click "Add New" (Posts > Add New).

  NOTE: the site is organized into 6 categories:
  "about", "team", "studies", "community", "participate", and "join", 
  where the "about" category is the homepage.
  You will see the names of these categories in the "Categories" panel
  on the right-hand side of the page.

  If you want your new post to appear on the site, be sure to check
  the appropriate category for the post. Otherwise, the post will
  by default be put in the "uncategorized" category, and will not show up 
  on the site.

##Adding images that change on hover

  If you want to add an image that changes to a different image on
  hover, following the style of the "Team" page, first upload your
  images in the "Media" panel (Media > Add New) and 
  edit them as you see fit (crop, scale, etc).

  Then, click "Add Media" in the new post page (Posts > Add New > Add Media) 
  and select the two pictures you want. (Note that you can also
  upload media from this interface as well.)

  The first picture inserted into the post should be the original image;
  the second, the image that you want to see on hover.
  Then, after you insert the images, go to the "Text" editor for your new post
  (as opposed to the "Visual" editor). 
  You should see two strings of text that begin with ```"<img"``` and end with
  ```"/>"```, without the quotation marks.
  Before the ```"/>"``` of each image, insert this text:
  
    data-image-type="change-on-hover"

  So, for example, if your original image was this:

    <img class="size-thumbnail" src="hello.png" />

  Your new image would be this:
    
    <img class="size-thumbnail" src="hello.png" data-image-type="change-on-hover" />

  NOTE: if your images do not contain the data-image-type attribute with the
  "change-on-hover" value, they will show up as normal images.

##Editing or deleting content

  To edit or delete content, go to the "Posts" link in the left navigation panel
  and click "All Posts". From there you have the options to Edit posts, Delete
  posts, and so on. (Posts > All Posts > Edit) or (Posts > All Posts > Trash)

##Changing post order

  By default, posts published more recently will show up first on the site.
  However, if you would like to change the post order, you can do so with the
  "Intuitive Custom Post Order" plugin, which is installed for you.

  To use it, go to the "All Posts" page. From here, you can drag and 
  drop your posts in the order you like.

##Embedding forms in posts

  Your site has a plugin called "Contact Form 7", which allows you to embed
  forms in your site like the Participate form and the Undergraduate Student
  Research Assistant form. To add a new form, click on the "Contact" link in the
  left navigation panel and click "Add New" (Contact > Add New). 

  From here, you can choose the types of of input for your form, 
  the email settings for the form, and the text to display to the user.
  You can find detailed documentation for using Contact Form 7 at
  [Contact Form 7's documentation page](http://contactform7.com/docs/).

##Other

  To report issues, ask questions, or provide feedback, 
  email me at [tsafavi@umich.edu](mailto:tsafavi@umich.edu).

