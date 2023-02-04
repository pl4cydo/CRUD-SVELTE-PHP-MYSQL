<script>
  import Cadastro from "./tools/Cadastro.svelte";
  import Lista from "./tools/Lista.svelte";
  import Login from "./tools/Login.svelte";
  import { state } from "./Stores";
</script>

<main>
    <header>
      <div id="title">
        <h1>Gerenciamento</h1>
        <h1>Automoveis</h1>
      </div>
      <ul>
        <a href="#"><li>GitHub</li></a>
        <a href="#"><li>Linkedin</li></a>
        <li id="cadastro">Cadastro</li>
      </ul>
    </header>

    {#if $state === 'login'}
      <Login />
    {:else if $state === 'crud'}
    <div id="bloco">
        <Cadastro />
        <Lista />
    </div>
    {/if}

</main>
