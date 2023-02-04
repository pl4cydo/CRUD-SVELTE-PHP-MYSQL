<script>
  import { automoveis, removeProduct, currentUser } from "../Stores";


  function remove(id) {
    removeProduct(id, $currentUser.id)
  }
</script>

<div id="Lista">
    <h2>Lista de Automoveis</h2>
    <table>
      <thead>
        <tr>
          <th><h4>Modelo</h4></th>
          <th><h4>Ano</h4></th>
          <th><h4>Cor</h4></th>
          <th><h4>Placa</h4></th>
          <th><h4>Opções</h4></th>
        </tr>
      </thead>
      <tbody>
        {#each $automoveis as el}
          <tr>
            <td><h4>{el.modelo}</h4></td>
            <td><h4>{el.ano}</h4></td>
            <td><h4>{el.cor}</h4></td>
            <td><h4>{el.placa}</h4></td>
            <th><button id="buttonList" on:click|preventDefault={() => remove(el.id)}>remover</button></th>
          </tr>
        {/each}
      </tbody>
      
    </table>
  </div>