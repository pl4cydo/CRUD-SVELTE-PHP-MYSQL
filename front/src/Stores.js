import { writable } from "svelte/store";

export const state = writable('login')

export const users = writable([]);
export const currentUser = writable(null);
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
    // loadProducts(data.id)
}