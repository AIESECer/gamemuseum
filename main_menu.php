<!--
Nom:main_menu.php
Auteur:Yami yami_ne1(à)hotmail.com
Role: le menu du site
Site:www.emulation.com
Date de creation: Lundi-26-Mars-2007
Derniere Modification:Lundi-26-Mars-2007
-->



<div class="element_menu">
   <h3>Emulation</h3>
       <ul>
           <li><a href="emulation.php?url=emulation">Toute l'emulation </a></li>
           <li><a href="emulation.php?url=help">Aide Generale </a></li>
           <li><a href="emulation.php?url=faq">F.A.Q</a></li>
       </ul>
</div>
<br />
   <div class="element_menu">
       <h3>Dernieres Rooms</h3>
	   <ul>
       <? include('news/last_room.php'); ?>
	   </ul>
   </div>
   
<br />
<div class="element_menu">
<h3>Publicité</h3>


</div>
<br />
<div class="element_menu">
<h3>Partenaires</h3>
<p><? include('site/partenairs.php'); ?></p>
<br />
<a href="site.php?url=link">Devenir Partenaire </a>
</div>
<br />
<div class="element_menu">
<h3>Emu-Stats</h3>
<? include('stats.php'); ?>
</div>
<br />
