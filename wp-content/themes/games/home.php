<?php get_header(); ?>
<div class="container">

   <?php  get_search_form();  ?>

   <?php  get_sidebar(); ?>
   <h2>مرحبا بكم مدونة للالعاب</h2>
   <img src="data:image/jpeg;base64,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">
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvvBz1PLevDNPtEbMOuBCh-IxwmLtYC5yKSQ&s">
   <img src="data:image/jpeg;base64,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">
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdaOZqFEnqn3aWe2KDt8x3ALlO76DCE1vMpA&s"><br>
   <table>
      <tr>
         فيفا
      </tr>
      <tr>
         كور
      </tr>
   </table>


   <embed src="http://localhost:8020/wp-content/uploads/2024/09/سجل-الاكاديمي-1.pdf" width="250px" height="250px"></embed>

   <iframe src="http://localhost:8020/wp-content/uploads/2024/09/سجل-الاكاديمي-1.pdf" width="300px" h></iframe>

   <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/fRjLXkeg47g?si=oFLxfiIRW3164q5-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


   <video width="200" height="200" controls>
      <source src="http://localhost:8020/wp-content/uploads/2024/09/aaa.mp4" type="video/mp4">
   </video>



   <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/qX6XEhWij-A?si=X-LOOu6uV047Llx-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


   <video width="320" height="240" controls>
      <source src="http://localhost:8020/wp-content/uploads/2024/09/5-seconds-عداد-خمس-ثواني.mp4" type="video/mp4">
      Your browser does not support the video tag.
   </video>

   <img src="http://localhost:8020/wp-content/uploads/2024/08/4_A91jAv_400x400-1.jpg" width="170px" h><BR><br><br>




   <iframe src="https://www.flipsnack.com/FEEE8977C6F/final-project/full-view.html" frameborder="0"></iframe>






   <iframe src="https://online.anyflip.com/wuqdi/dxtc/index.html" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" width="400px" height="400px"></iframe>







   <?php
   if (have_posts()) {
      while (have_posts()) {
         the_post();
         the_title();
         the_content();
         the_category();
      }
   }
   ?>

</div>
<?php get_footer(); ?>