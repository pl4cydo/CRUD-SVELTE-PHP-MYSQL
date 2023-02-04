<script>
    import { state, currentUser, login } from "../Stores";

    const form = {
        username: "",
        pw: "",
    };

    const handleForm = async () => {
        await login(form.username, form.pw);
        if ($currentUser) {
            $state = 'crud';
        }
    };

</script>

<div id="boxLogin">
    <h1>Login</h1>
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
            id="loginButton" 
            type="submit" 
            value="Entrar"
        />
    </form>
</div>