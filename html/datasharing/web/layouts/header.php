<nav class="navbar navbar-expand-md navbar-light bg-light mb-3">
    <a class="navbar-brand" href="./index.php"><?php echo TITLE; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav3">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">データリスト</a>
            </li>
            <!-- 管理者権限のユーザーのみ表示 -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="./howto.php">ユーザー情報</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./setting.php">操作ログ</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="./logout.php">ログアウト</a>
            </li>
        </ul>
    </div>
</nav>