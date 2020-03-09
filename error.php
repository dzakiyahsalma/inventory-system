<?php
if (count($error) > 0) :
?>
    <div class="error">
        <?php
        foreach ($error as $eror) :
        ?>
            <p>
                <?php
                echo $eror
                ?>
            </p>
        <?php
        endforeach
        ?>
    </div>
<?php
endif
?>