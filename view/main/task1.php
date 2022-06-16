<nav class="navbar navbar-expand-lg bg-dark .navbar-dark">
    <div class="container-fluid mb-8">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="task2">TASK 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="task3">TASK 3</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<form method="post" action="task1">
    <div class="mb-3">
        <label class="form-label">Enter Number</label>
        <input type="text" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


<?php

if (!empty($_POST['number'])) {
    $number = $_POST['number'];

    function myArrowFunc(int $number)
    {
        $str = '';
        $t = '';
        for ($i = 0; $i < $number; $i++) {
            $str = '<' . $str . '>';
        }
        return $str;
    }

    ?>
    <h1><?= myArrowFunc($number) ?></h1>
    <?php

}
