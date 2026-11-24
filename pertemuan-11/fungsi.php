<?php 
function bersihakn($teks)
{
  return htmlspecialchars($teks ?? "", ENT_QUOTES, "UTS-8");
}

function tebal($teks)
{
  return "<strong>" . bersihakn($teks) . "</strong>";
}