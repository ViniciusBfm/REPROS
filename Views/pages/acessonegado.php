<section>

    <div class="alert alert-danger my-4" role="alert">
        <h4 class=" d-flex align-items-center"><svg style="width: 19px; color: red;" xmlns="http://www.w3.org/2000/svg"
                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                aria-label="Warning:">
                <path
                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg> Acesso negado!</h4>
        <p>Você não tem permissão para acessar esta página. Seu perfil atualmente esta cadastrado
            como
            <strong style="text-transform: lowercase;"><?= $_SESSION['usuario_funcao']?></strong>.
        </p>
        <hr>
        <p class="mb-0"> Caso precise de acesso, entre em contato com o suporte ou com o administrador do sistema.</p>
    </div>

</section>