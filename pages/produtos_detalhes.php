<?php 
include "dados/dados.php"; 
$id = $_REQUEST['id'];
?>


<div class="header-height"></div>

 <section class="product-details padding">
            <div class="container">
                <div class="row shop-details-wrap">
                    <div class="col-md-6 sm-padding">
                       
                            <div><img src="<?php echo $produtos[$id]['image']; ?>" alt=""></div>
                     
                    </div>
                    <div class="col-md-6 sm-padding">
                        <div class="shop-details">
                            <h2><?php echo $produtos[$id]['nome']; ?></h2>
                            <h3>R$<?php echo $produtos[$id]['valor']; ?><span>R$<?php echo $produtos[$id]['desconto']; ?></span></h3>
                            <p><?php echo $produtos[$id]['descricao']; ?></p>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <ul class="social-share">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                            <ul class="cart-wrap">
                                <li>
                                    <div class="item-plus-minus">
                                        <input type="text" value="1">
                                    </div>
                                </li>
                                <li><a class="default-btn" href="#">Adicionar ao Carrinho<span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.product-details-->

<?php

?>