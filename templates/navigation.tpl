<nav>
    <ul>
        <li>{if $current_page eq "index"}<span>Home</span>{else}<a href='./index.php'>Home</a>{/if}</li>
        <li>{if $current_page eq "user"}<span>User</span>{else}<a href='./user.php'>User</a>{/if}</li>
        <li>{if $current_page eq "login"}<span>Login</span>{else}<a href='./login.php'>Login</a>{/if}</li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>