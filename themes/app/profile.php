<?php
    $this->layout("_theme");
?>

<div class="row mt-5">
        <div class="col-md-4">
            <div class="text-center profile-pic-container">
                <!-- Adicione a classe 'profile-pic' à imagem -->
                <img src="https://s2-vogue.glbimg.com/kTjjoYokmCzyu4fvFJsrZOZq0eY=/0x0:620x930/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_5dfbcf92c1a84b20a5da5024d398ff2f/internal_photos/bs/2022/m/c/iq2yk2RrqM0OB4v1iDEg/2022-03-23-gettyimages-1181337399-o9ohvkw.jpg"
                    alt="Foto de Perfil" class="img-fluid rounded-circle profile-pic">
                <!-- Ícone de edição usando Font Awesome -->
                <div class="edit-icon">
                    <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#editarFotoModal">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card  p-3">
                <h2>Nome Completo</h2>
                <p><strong>Email:</strong> exemplo@email.com</p>
                <p><strong>Idade:</strong> 30 anos</p>
                <p><strong>Cidade:</strong> Exemploville</p>
                <p><strong>País:</strong> Exemplolandia</p>
                <p><strong>Esporte Favorito:</strong> Futebol</p>
                <p><strong>Descrição:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur
                    malesuada libero, quis tincidunt quam sollicitudin ac.</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarPerfilModal">Editar
                    Perfil</button>

            </div>
        </div>
    </div>
    </div>

    <!-- Modal de Edição de Perfil -->
    <div class="modal fade" id="editarPerfilModal" tabindex="-1" aria-labelledby="editarPerfilModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarPerfilModalLabel">Editar Perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulário com campos pré-populados -->
                    <form>
                        <div class="mb-3">
                            <label for="nomeCompleto" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" id="nomeCompleto" value="Nome Completo Atual"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" value="exemplo@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="idade" class="form-label">Idade:</label>
                            <input type="number" class="form-control" id="idade" value="30" required>
                        </div>
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" value="Exemploville" required>
                        </div>
                        <div class="mb-3">
                            <label for="pais" class="form-label">País:</label>
                            <input type="text" class="form-control" id="pais" value="Exemplolandia" required>
                        </div>
                        <div class="mb-3">
                            <label for="esporteFavorito" class="form-label">Esporte Favorito:</label>
                            <input type="text" class="form-control" id="esporteFavorito" value="Futebol" required>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição:</label>
                            <textarea class="form-control" id="descricao"
                                rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur malesuada libero, quis tincidunt quam sollicitudin ac.</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </div>
        </div>
    </div>

 <!-- Modal para editar a foto -->
 <div class="modal fade" id="editarFotoModal" tabindex="-1" aria-labelledby="editarFotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarFotoModalLabel">Editar Foto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário para fazer upload da foto -->
                <form>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Escolha uma foto:</label>
                        <input type="file" class="form-control" id="foto" accept="image/*">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar Foto</button>
            </div>
        </div>
    </div>
</div>

 <!-- Inclua os scripts do Bootstrap e jQuery (opcional) -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
