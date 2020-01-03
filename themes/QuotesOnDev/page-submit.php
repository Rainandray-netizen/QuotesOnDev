<?php get_header(); ?>

​<div class="left-quote-container">
        <i class="fas fa-quote-left"></i>
</div>
<div class="right-quote-container">
    <i class="fas fa-quote-right"></i>
</div>
<section class="submit-content">
    <div class="submit-title-wrapper">
        <h3>Submit A Quote</h3>
    </div>
<form class="submit-form">
    <p>Author of Quote</p>
    <input type="text" id="quote-title">
    <p>Quote</p>
    <input class="quote-input" type="text" id="quote-content">
    <p>Provide the URL of the quote source, if available.</p>
    <input type="text" id="quote-source">
    <p>Where did you find this Quote?(e.g. book name)</p>
    <input type="text" id="quote-permalink">
    <br>
    <div class="button-wrapper">
        <button type="button" id="submit">Submit a Quote</button>
    </div>  
</form>
</section>

​
  
​
<?php get_footer();?>