<?php
    $this->layout("_theme");
?>

<div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Tela de Login</h3>
                    </div>
                    <div class="card-body">
                        <form id="form-login">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="Digite seu email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha:</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button> 

                            <div id="message"></div>

                            <p class="mt-2 mx-1">Não tem uma conta? <a href="<?= url("cadastrar"); ?>">Cadastre-se!</a></p>
                            <div class="card-footer text-center mt-4">
                                <a href="<?= url(); ?>" class="btn btn-secondary mt-2">Voltar para a página inicial</a>
                            </div>
                        </form>
                        <script type="text/javascript" async>
                            const form = document.querySelector("#form-login");
                            const message = document.querySelector("#message");
                            form.addEventListener("submit", async (e) => {
                                e.preventDefault();
                                const dataUser = new FormData(form);
                                const data = await fetch("<?= url("entrar"); ?>",{
                                    method: "POST",
                                    body: dataUser,
                                });
                                const user = await data.json();
                                console.log(user);
                                if(user) {
                                    if(user.type === "success"){
                                        window.location.href = "<?= url("perfil") ?>";
                                    } else {
                                        console.log(user);
                                        message.innerHTML = user.message;
                                        message.classList.add("message");
                                        message.classList.remove("success", "warning", "error");
                                        message.classList.add(`${user.type}`);
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>