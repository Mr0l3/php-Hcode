<?php
echo "<select>";
for ($i=date('Y'); $i >= date('Y') - 50; $i--) { 
    echo "<option value=\"carro$i\">Carro ano $i</option>";
}
echo "</select>";
