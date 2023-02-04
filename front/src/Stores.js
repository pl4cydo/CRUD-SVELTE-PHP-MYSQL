import { writable } from "svelte/store";

export const state = writable('login')
export const stateBloco = writable({
    bl: 'cadastro',
    hed: 'cadastro',
    but: 'cadastro'
})

export const IdAlterar = writable(null)

export const loginA = writable(false)
export const users = writable([]);
export const currentUser = writable(null);
export const automoveis = writable([]);
// export const products = writable([]);


export const login = async (username, pw) => {
    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', pw);
    const response = await fetch('http://localhost:8001/login.php', {
        method: 'post',
        body: formData
    });
    if (!response.ok) {
        alert('usuário ou senha incorretos');
        return;
    }
    const data = await response.json();
    currentUser.set(data);
    loadProducts(data.id)
}

async function loadProducts(user_id) {
    // console.log('deve carregar os produtos do usuário ' + user_id)
    const response = await fetch('http://localhost:8001/listarAutomoveis.php?login_id=' + user_id, {
        method: 'get'
    });
    const data = await response.json();
    automoveis.set(data);
}

export function addProduct(modelo, ano, cor, placa, login_id) {
    const formData = new FormData();
    formData.append('modelo', modelo);
    formData.append('ano', ano);
    formData.append('cor', cor);
    formData.append('placa', placa);
    formData.append('login_id', login_id);
    

    fetch('http://localhost:8001/addAutomovel.php', {
        method: 'post',
        body: formData
    });

    loadProducts(login_id)
}

export async function removeProduct(id, login_id) {
    await fetch('http://localhost:8001/deletarAutomovel.php?id=' + id, {
        method: 'get'
    });
    loadProducts(login_id)
}

export function altProduct(id, modelo, ano, cor, placa, login_id) {

    const formData = new FormData();
    formData.append('id', id);
    formData.append('modelo', modelo);
    formData.append('ano', ano);
    formData.append('cor', cor);
    formData.append('placa', placa);
    formData.append('login_id', login_id);
    

    fetch('http://localhost:8001/alterarAutomovel.php', {
        method: 'put',
        body: formData
    });

    loadProducts(login_id)
}
  

 