<template>
     <div class="pagetitle">
        <h1>Simple utilisateurs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accuiel</a></li>
                <li class="breadcrumb-item">Utilisateurs</li>
                <li class="breadcrumb-item active"> activites des utilisateurs</li>
            </ol>
        </nav>
    </div>
   
    <div class="card" style="background: none !important;">
        <h4 class="m-9">Recent activites</h4>
        <ul class="accordion">
        <li>
            <input type="radio" name="accordion" id="first" checked>
            <label for="first" class="first">Ymele orelien <br>
               </label>

            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in quibusdam sed dicta
                    aspernatur, aliquid vero perferendis natus tenetur repudiandae!</p>
            </div>
            <div style="opacity: 80;font-size: 15px;"> <i class="fa-solid fa-stopwatch m-1" style="font-size: 15px;"></i>17min</div> 
        </li>
        <li>
            <input type="radio" name="accordion" id="second">
            <label for="second">Products</label>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in quibusdam sed dicta
                    aspernatur, aliquid vero perferendis natus tenetur repudiandae!</p>
            </div>
            <div style="opacity: 80;font-size: 15px;"> <i class="fa-solid fa-stopwatch m-1" style="font-size: 15px;"></i>17min</div> 
        </li>
        <li>
            <input type="radio" name="accordion" id="third">
            <label for="third">Products</label>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in quibusdam sed dicta
                    aspernatur, aliquid vero perferendis natus tenetur repudiandae!</p>
            </div>
            <div style="opacity: 80;font-size: 15px;"> <i class="fa-solid fa-stopwatch m-1" style="font-size: 15px;"></i>17min</div> 
        </li>
        <li>
            <input type="radio" name="accordion" id="fourth">
            <label for="fourth">Products</label>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in quibusdam sed dicta
                    aspernatur, aliquid vero perferendis natus tenetur repudiandae!</p>
            </div>
            <div style="opacity: 80;font-size: 15px;"> <i class="fa-solid fa-stopwatch m-1" style="font-size: 15px;"></i>17min</div> 
        </li>
        <li>
            <input type="radio" name="accordion" id="five">
            <label for="five">Products</label>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in quibusdam sed dicta
                    aspernatur, aliquid vero perferendis natus tenetur repudiandae!</p>
            </div>
            <div style="opacity: 80;font-size: 15px;"> <i class="fa-solid fa-stopwatch m-1" style="font-size: 15px;"></i>17min</div> 
        </li>
        <li>
            <input type="radio" name="accordion" id="six">
            <label for="six">Products</label>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in quibusdam sed dicta
                    aspernatur, aliquid vero perferendis natus tenetur repudiandae!</p>
            </div>
            <div style="opacity: 80;font-size: 15px;"> <i class="fa-solid fa-stopwatch m-1" style="font-size: 15px;"></i>17min</div> 
        </li>
    </ul>
                     <div class="card-body">
                        <h5 class="card-title">Basic Pagination</h5>
                        <nav aria-label="Page navigation example">
                           <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
</template>
<script>
</script>
<style>

.accordion{
 
    max-width: 90% ;
}
.accordion li{
    list-style: none;
    width: 100%;
    margin: 20px ;
padding: 10px;
border-radius: 8px;
background: #e3edf7;
box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
-6px 6px 10px -1px rgba(255, 255, 255, 0.7);
}
.accordion li label{
    display: flex;
    align-items: center;
    padding: 10px;
    font-size: 18px;
    font-weight: 500;
    cursor:pointer;
}
label::before{
   content: "+";
   margin-right: 10px;
   font-size: 24px;
   font-weight: 600;
}input[type='radio']{
display: none;
}

.accordion .content{
    color:#555;
    padding: 0 10px;
    line-height: 26px;
    max-height: 0;
    transform: max-height 0.5s,padding 0.5s;
    overflow: hidden;
}
.accordion input[type='radio']:checked +label + .content {
    max-height: 400px;
    padding: 10px 10px 20px;
    transform: max-height 0.5s,padding 0.5s;
}
.accordion input[type="radio"]:checked + label:before{
    content:'-'

}
</style>