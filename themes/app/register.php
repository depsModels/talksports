<?php
    $this->layout("_theme");
?>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Tela de Cadastro</h3>
                    </div>
                    <div class="card-body">
                        <form id="form-register">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nome de usuário:</label>
                                <input type="text" name="nickname" class="form-control" id="username"
                                    placeholder="Digite seu nome de usuário" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha:</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>

                            <div id="message"></div>

                            <p class="mt-2 mx-1">Já possui uma conta? <a href="<?= url("entrar"); ?>">Clique aqui!</a></p>

                            <div class="card-footer text-center mt-4">
                                <a href="<?= url(); ?>" class="btn btn-secondary mt-2">Voltar para a página inicial</a>
                            </div>
                        </form>
                        <script type="text/javascript" async>
                            const form = document.querySelector("#form-register");
                            const message = document.querySelector("#message");
                            form.addEventListener("submit", async (e) => {
                                e.preventDefault();
                                const dataUser = new FormData(form);
                                const data = await fetch("<?= url("cadastrar"); ?>",{
                                    method: "POST",
                                    body: dataUser,
                                });
                                const user = await data.json();
                                console.log(user);
                                if(user) {
                                    message.innerHTML = user.message;
                                    message.classList.add("message");
                                    message.classList.remove("success", "warning", "error");
                                    message.classList.add(`${user.type}`);
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>