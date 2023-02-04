<script>
    import { addUsuario, state } from "../Stores";

    const form = {
        username: "",
        pw: "",
        email: ""
    }

    function handleForm() {
        addUsuario(form.username, form.pw, form.email);
        $state = 'login'
    }

</script>

<div id="cadastroUsu">
    <h1>Cadastro</h1>
    <form on:submit|preventDefault={handleForm}>
            <input 
            id="loginInput"
            type="text" 
            name="usarname"
            bind:value={form.username}
            placeholder="Usuario"
            required 
        />
        <input 
            id="loginInput" 
            type="password"
            name="pw"
            bind:value={form.pw} 
            placeholder="Senha"
            required
        />
        <input 
            id="loginInput" 
            type="text"
            name="email"
            bind:value={form.email} 
            placeholder="email"
            required
        />
        <input 
            id="loginButton" 
            type="submit" 
            value="Cadastrar"
        />
    </form>
</div>