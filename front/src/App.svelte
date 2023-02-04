<script>
  import Cadastro from "./tools/Cadastro.svelte";
  import Lista from "./tools/Lista.svelte";
  import Login from "./tools/Login.svelte";
  import Alterar from "./tools/Alterar.svelte";

  import { state,  stateBloco, loginA } from "./Stores";
  import CadastroUsuario from "./tools/CadastroUsuario.svelte";

  function alterarBLoco(){
    $stateBloco.bl = 'alterar'
    $stateBloco.hed = 'alterar'
    $stateBloco.but = 'alterar'
  }

  function alterarBLoco2(){
    $stateBloco.bl = 'cadastro'
    $stateBloco.hed = 'cadastro'
    $stateBloco.but = 'cadastro'
  }


</script>

<main>
    <header>
      <div id="title">
        <h1>Gerenciamento</h1>
        <h1>Automoveis</h1>
      </div>
      <ul>
        <!-- svelte-ignore a11y-click-events-have-key-events -->
        {#if $loginA}
            {#if $stateBloco.hed === 'cadastro'}
            <li  on:click={() => alterarBLoco()}>Aterar Automovel</li>
            {:else if $stateBloco.hed === 'alterar'}
              <li on:click={() => alterarBLoco2()}>Cadastrar Automovel</li>
            {/if}
        {/if}
        <a href="#"><li>GitHub</li></a>
        <a href="#"><li>Linkedin</li></a>
        {#if !$loginA}
            <!-- svelte-ignore a11y-click-events-have-key-events -->
            <li on:click={() => {$state = 'cadastroUsuario'}} id="cadastro">Cadastro</li>
        {/if}
      </ul>
    </header>

    {#if $state === 'login'}
      <Login />
    {:else if $state === 'cadastroUsuario'}
      <CadastroUsuario />
    {:else if $state === 'crud'}
    <div id="bloco">
        {#if $stateBloco.bl === 'cadastro'}
          <Cadastro />
        {:else if $stateBloco.bl === 'alterar'}
          <Alterar />
        {/if}  
        <Lista />
    </div>
    {/if}

</main>
