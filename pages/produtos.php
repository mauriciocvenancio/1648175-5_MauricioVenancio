<?php include "dados/dados.php"; ?>


<div class="header-height"></div>

<section class="product-section padding bg-grey">
            <div class="container">
               <div class="row align-items-center mb-30">
                   <div class="col-lg-6">
                        <div class="product-showing">
                           
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                      
                    </div>
               </div>
                <div class="product-items row">
					<?php if($produtos){foreach ($produtos as $k => $valor){ ?>
                    <div class="col-lg-3 col-sm-6 padding-15 single-item food juice">
                        <div class="product-item">
                            <div class="product-thumb">
                                <img src="<?php echo $produtos[$k]['image']; ?>" alt="img">
                                <ul class="product-btn-group">
                                    <li><a href="index.php?pag=4&id=<?php echo $k ?>"><i class="ti-shopping-cart-full"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="index.php?pag=4&id=<?php echo $k ?>"><?php echo $produtos[$k]['nome']; ?></a></h3>
                                <h4><span>R$<?php echo $produtos[$k]['valor']; ?></span><span class="old">R$<?php echo $produtos[$k]['desconto']; ?></span></h4>
                            </div>
                        </div>
                    </div>
					<?php }} ?>
                </div>
            </div>
        </section><!--/.product-section-->

<?php

?>