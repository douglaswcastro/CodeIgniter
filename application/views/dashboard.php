        <div  class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            
          </div>
          <div class="row">
            <div class=col-md-4>
              <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
               <div class="card-header text-center">
                <h6 class="mt-3 text-white">
                 <span data-feather="monitor" class="text-center"></span>
                 Usuarios Cadastrados
               </h6>
               <h6 class="mt-3 text-white">
                 <?= $usuario; ?>
               </h6>
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
             <div class="card-header text-center">
              <h6 class="mt-3 text-white">
               <span data-feather="monitor" class="text-center"></span>
               Filmes Cadastrados
             </h6>
             <h6 class="mt-3 text-white">
               <?= $filme; ?>
             </h6>
           </div>
         </div>
       </div>
       <div class="col-md-4">
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
         <div class="card-header text-center">
          <h6 class="mt-3 text-white">
           <span data-feather="monitor" class="text-center"></span>
           Jogos Cadastrados
         </h6>
         <h6 class="mt-3 text-white">
           <?= $jogo; ?>
         </h6>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
