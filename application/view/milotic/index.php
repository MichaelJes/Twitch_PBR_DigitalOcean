<div class="container" >
    <div class="section">
    <div class="row">
        <div class="col s12 m5">

            <h4 class="center indigo-text">Blue <?php echo $team[1] ?>%</h4>
        </div>
        <div class="col s0 m2 "></div>
        <div class="col s12 m5 red-text">

            <h4 class="center">Red <?php echo $team[0] ?>%</h4>
        </div>
    </div>
        <div class="row">
      <!--   Red Section   -->
        <div class="col s12 m5">
            <ul id="staggered-test">
            <?php
            foreach ($current as $value){
                $imageUrl = 'img/sprite/'.$value['dex'].'.png';
                echo '
        <li class="" style="transform: translateX(0px); opacity: 0;">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card horizontal #3949ab indigo darken-1 hoverable">
                        <div class="card-image ">';
                            echo "<img alt=\"{$value['name']}\" src=\"{$imageUrl }\" width='120' height='120'>";
                        echo '</div>
                        <div class="card-content white-text ">
                            <h5>', $value['name'],'</h5>
                            <p>','WinPrecentage: '.$value['winrate'].'%','</p>
                            <p>','PointTotal: '.$value['points'],'</p>
                        </div>

                    </div>
                </div>
            </div>
            </li>';
            }
            ?>
            </ul>
        </div>
        <div class="col s12 m2">
            <p></p>
        </div>
          <!--   Red Section   -->
        <div class="col s12 m5">
            <ul id="staggered-tezt">
            <?php
            foreach ($blueCurrent as $value){
                $imageUrl = 'img/sprite/'.$value['dex'].'.png';
                echo '
        <li class="" style="transform:translateX(0px); opacity: 0;">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card horizontal #d32f2f red darken-2 hoverable cardShow">
                        <div class="card-image ">';
                echo "<img alt=\"{$value['name']}\" src=\"{$imageUrl }\" width='120' height='120'>";
                echo '</div>
                        <div class="card-content white-text ">
                            <h5>', $value['name'],'</h5>
                            <p>','WinPrecentage: '.$value['winrate'].'%','</p>
                            <p>','PointTotal: '.$value['points'],'</p>
                        </div>

                    </div>
                </div>
            </div>
            </li>';
            }
            ?>
            </ul>
        </div>
        </div>
        <div class="row">
            <ul id="staggered-test">
                <li class="" style="transform: translateX(0px); opacity: 0;">
                    <h4 ><a href="#">List Item</a></h4>
                    <p>This is a description</p>
                </li>
                <li class="" style="transform: translateX(0px); opacity: 0;">
                    <h4><a href="#">List Item</a></h4>
                    <p>This is a description</p>
                </li>
            </ul>
        </div>
    </div>
</div>