<?php include_once "header.php" ?>




<section class="dashboard">
    <div class="container dashboard__container">
        <button class="sidebar__toggle" id="show__sidebar-btn"><i class="fa-sharp fa-solid fa-chevron-right"></i></button>
        <button class="sidebar__toggle" id="hide__sidebar-btn"><i class="fa-sharp fa-solid fa-chevron-left"></i></button>
        <aside>
            <ul>
                <li><a href="add-post.php">
                        <i class="fa-solid fa-pen"></i>
                        <h5>Add Post</h5>
                    </a>
                </li>

                <li><a href="dashboard.php">
                        <i class="fa-solid fa-address-card" class="active"></i>
                        <h5>Manage Post</h5>
                    </a>
                </li>

                <li><a href="add-user.php">
                        <i class="fa-solid fa-user"></i>
                        <h5>Add User</h5>
                    </a>
                </li>

                <li><a href="manage-users.php">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <h5>Manage User</h5>
                    </a>
                </li>

                <li><a href="add-category.php">
                        <i class="fa-solid fa-pen"></i>
                        <h5>Add Category</h5>
                    </a>
                </li>

                <li><a href="manage-categories.php">
                        <i class="fa-solid fa-list"></i>
                        <h5>Manage Categories</h5>
                    </a>
                </li>
            </ul>
        </aside>
        <main>
            <h2>Manage categories</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Wild Life</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn danger">Delete</a></td>
                    </tr>

                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Wild Life</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn danger">Delete</a></td>
                    </tr>

                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Wild Life</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn danger">Delete</a></td>
                    </tr>


                </tbody>
            </table>
        </main>
    </div>
</section>



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

<script src="main.js"></script>
</body>

</html>

</body>

</html>