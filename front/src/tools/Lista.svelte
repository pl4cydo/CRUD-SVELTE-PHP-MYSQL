<script>
  import { automoveis } from "../Stores";
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
        </tr>
      </thead>
      <tbody>
        {#each $automoveis as el}
          <td><h4>{el.Modelo}</h4></td>
          <td><h4>{el.ano}</h4></td>
          <td><h4>{el.cor}</h4></td>
          <td><h4>{el.placa}</h4></td>
        {/each}
        <tr>
          
        </tr>
      </tbody>
      
    </table>
  </div>