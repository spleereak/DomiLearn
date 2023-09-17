<?php require_once "layout/header.php"; ?>
<body>
<section class="tab-components">
    <div class="container-fluid offset-md-1">
        <section class="table-components">
            <div class="container-fluid">
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title mb-30">
                                <h2>Добавление пользователя в школу</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-elements-wrapper">
                    <form action="/school/user/add" method="POST">
                        <div class="row">
                            <div class="col-lg-10">
                                <!-- input style start -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Поля ввода</h6>
                                    <div class="input-style-2">
                                        <label>ID Пользователя</label>
                                        <input name="studentId" type="number" placeholder="ФИО"/>
                                        <span class="icon"> <i class="lni lni-user"></i>
                                    </div>
                                    <!-- end input -->
                                    <div class="select-style-1">
                                        <label>Выбери класс</label>
                                        <div class="select-position">
                                            <select class="light-bg" name="classId">
                                                <?php foreach ($grades as $class): ?>
                                                    <option value="<?php echo $class->id; ?>"><?php echo $class->grade; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="select-style-1">
                                        <label>Выберите роль</label>
                                        <div class="select-position">
                                            <select class="light-bg" name="role">
                                                    <option value="Ученик">Ученик</option>
                                                    <option value="Учитель">Учитель</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end input -->
                                    <div class="col-12">
                                        <div class="button-group d-flex justify-content-center flex-wrap">
                                            <button class="main-btn primary-btn btn-hover w-100 text-center"
                                                    type="submit">
                                                Войти
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end button -->
                                </div>
                                <p align="center">Ещё не зарегистрирован? <a href="/register" class="btn-registration">Регистрация</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
</body>
<?php require_once "layout/footer.php"; ?>
