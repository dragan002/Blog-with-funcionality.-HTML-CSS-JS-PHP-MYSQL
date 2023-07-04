<?php include_once "header.php" ?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
        <div class="alert__message error">
            <p>This is an success message</p>
        </div>
        <form action="" enctype="multipart/form-data">

            <input type="text" placeholder="Title">
            <select name="" value="1" id="">
                <option value="1">Travel</option>
                <option value="2">Art</option>
                <option value="3">Science</option>
            </select>
            <textarea name="" id="" placeholder="body" rows="8"></textarea>
            <div class="form-control inline">
                <input type="checkbox" id="is_featured">
                <label for="is_featured" checked>Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn"><a href="">Add post</a></button>
        </form>
    </div>
</section>
<!-- ==================================FOOTER==================-->

<footer>
    <div class="footer__socials">
        <a href="www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>

        <a href="www.facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>

        <a href="www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>

        <a href="www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        <a href="www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
    </div>

    <div class="container footer__container">

        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Art</a></li>
                <li><a href="">Wild Life</a></li>
                <li><a href="">Travel</a></li>
                <li><a href="">Science</a></li>
                <li><a href="">Food</a></li>
            </ul>
        </article>

        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Numbers</a></li>
                <li><a href="">Emails</a></li>
                <li><a href="">Social Support</a></li>
                <li><a href="">Location</a></li>
                <li><a href="">Food</a></li>
            </ul>
        </article>

        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">Safety</a></li>
                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </article>

        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </article>
    </div>

    <div class="footer__copyright">
        <small>Copyright &copy 2023 Dragan </small>
    </div>
</footer>

<script src="main1.js"></script>
</body>

</html>