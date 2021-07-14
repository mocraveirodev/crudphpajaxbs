<?php
    include_once('includes/top.php');
?>

    <main class="form-register">
        <form action="/crudphpajaxbs/?register" method="POST" id="register">
            <h1 class="h3 mb-3 fw-normal">Registrar</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Primeiro Nome" required>
                <label for="name">Nome</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Sobrenome" required>
                <label for="lastname">Sobrenome</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
                <label for="phone">Telefone</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" required>
                <label for="email">E-mail</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                <label for="password">Senha</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirme a Senha" required>
                <label for="confirmPassword">Confirme a Senha</label>
            </div>
            <div id="error"></div>
            <button id="btn-register" class="w-100 btn btn-primary mt-2" type="submit">Registrar</button>
            <p class="mt-5 mb-3 text-muted">© Turma PHP - 2021</p>
        </form>

        <div id="user-register">
            <h1 class="h3 mb-3 fw-normal">Usuário Registrado</h1>

            <div class="card">
                <ul class="list-group list-group-flush">
                    <li id="user-name" class="list-group-item text-start">
                        <span class="fw-bold">Nome: </span>
                    </li>
                    <li id="user-phone" class="list-group-item text-start">
                        <span class="fw-bold">Telefone: </span>
                    </li>
                    <li id="user-email" class="list-group-item text-start">
                        <span class="fw-bold">Email: </span>
                    </li>
                </ul>
            </div>
            <a href="/crudphpajaxbs" class="w-100 btn btn-primary mt-2">Voltar</a>

            <p class="mt-5 mb-3 text-muted">© Turma PHP - 2021</p>
        </div>
    </main>

<?php include_once('includes/bottom.php'); ?>