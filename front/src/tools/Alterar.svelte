<script>
  import { automoveis, IdAlterar, altProduct, currentUser } from "../Stores";

  const form = {
    id: "",
    modelo: "",
    ano: "",
    cor: "",
    placa: "",
    user: ""
  };

  IdAlterar.subscribe( v => {
    encontrarAutomovel()
  })

  function encontrarAutomovel() {
    $automoveis.forEach((el) => {
      if (el.id === $IdAlterar) {
        form.id = el.id;
        form.modelo = el.modelo;
        form.ano = el.ano;
        form.cor = el.cor;
        form.placa = el.placa;
        form.user = $currentUser.id;
      }
    });
  }

  function handleForm() {
    console.log( form.id ,form.modelo, form.ano, form.cor, form.placa, form.user)
    altProduct( form.id ,form.modelo, form.ano, form.cor, form.placa, form.user);


    form.modelo = "";
    form.ano = "";
    form.cor = "";
    form.placa = "";
  }
</script>

<aside>
  <h2 id="h2Color">CRUD Options</h2>

  <h2>Alterar Automovel</h2>
  <p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
  </p>

  <form on:submit|preventDefault={handleForm}>
    <input
      type="text"
      placeholder="Modelo"
      name="modelo"
      bind:value={form.modelo}
      required
    />
    <input
      type="text"
      placeholder="Ano"
      name="ano"
      bind:value={form.ano}
      required
    />
    <input
      type="text"
      placeholder="Cor"
      name="cor"
      bind:value={form.cor}
      required
    />
    <input
      type="text"
      placeholder="Placa"
      name="placa"
      bind:value={form.placa}
      required
    />
    <input id="button" type="submit" value="Alterar" />
  </form>
</aside>
