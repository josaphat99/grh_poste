<section class="content">
        <header class="content__title">
            <h1>Resultat</h1>
            <small>Voici les personnes qui repondent à ce critere</small>
        </header>
<div class="card animated fadeInLeft">
            <div class="card-body">
                <header class="content__title">
                    <div class="row">
                        <div class="col-md-3 content__title">
                            <h1><b>CV</b></h1>
                        </div>
                    </div>
                </header>
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered">
                        <thead class="thead-default">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Critere1</th>
                                <th>Critere2</th>
                                <th>Action</th>
                            </tr>
                        </thead>                    
                        <tbody>
                        <form action="<?=site_url('acceuil/send_mail')?>" class="form-group" method="post">
                            <?php
                                $num = 0;
                                foreach($cv as $c)
                                { 
                                    $num++;
                                    if (count($c)>0) {
                            ?>                                    
                                    <tr class="text-center text-justify">
                                        <td><?=$num?></td>
                            <?php
                                    for ($i=0;$i<count($c);$i++) {
                                        ?>                                    
                                        <td><?=$c['k'.$i]?></td>                                  
                            <?php
                                    } ?>
                                        <td>                                        
                                            <div class="checkbox">
                                                <input type="checkbox" id="<?=$num?>" value="<?=$c['k0'].'-'.$c['k1']?>" name="<?=$c['k1']?>">
                                                <label class="checkbox__label" for="<?=$num?>"></label>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                }
                            ?>                                                                       
                        </tbody>
                    </table>                
                    <br>   
                    <div class="text-center">
                        <button class="btn btn-success text-center">Envoyer</button>
                    </div>  
                    </form>                    
                </div>
            </div>
        </div>
</section>