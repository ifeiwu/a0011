<?php
//Copyright (c) 2016 iFeiwu.com
 class Database extends Ifeiwu { function __construct() { $this->table = ''; parent::__construct(); } protected function postBackup() { goto kbzZI; kbzZI: ifeiwu\Loader::import("\145\x78\x74\145\x6e\144\x2f\x4d\x79\x73\x71\154\x42\141\x63\x6b\165\160"); goto OswB7; OswB7: $mb = new MysqlBackup(); goto ZxpcW; Lm1ev: Z0rS2: goto dJfUB; dJfUB: return $this->success('', $name); goto DAPix; DAPix: rxv9n: goto aLpK8; jj8xW: if ($name !== false) { goto Z0rS2; } goto e5Em8; ZxpcW: $name = $mb->export(); goto jj8xW; e5Em8: return $this->error(); goto Jy2Ri; Jy2Ri: goto rxv9n; goto Lm1ev; aLpK8: } protected function postReply($filename) { goto WV9eK; Ycxq6: if (!$errors) { goto lmJm_; } goto I8kzw; lu_hR: qZC8p: goto zlqQ3; EcXdL: lmJm_: goto TncKG; RNx1Z: $mb = new MysqlBackup(); goto GaZ5M; GaZ5M: $errors = $mb->import($filename); goto Ycxq6; WV9eK: ifeiwu\Loader::import("\145\170\164\x65\156\144\x2f\115\171\163\x71\154\x42\141\143\x6b\x75\160"); goto RNx1Z; TncKG: return $this->success(); goto lu_hR; I8kzw: return $this->error(json_encode($errors)); goto QKHKX; QKHKX: goto qZC8p; goto EcXdL; zlqQ3: } protected function getSqls() { goto M4ZLV; PMAs2: uIdO1: goto qbIFX; qbIFX: closedir($handle); goto GLj_K; M4ZLV: $dir = "\163\161\x6c\x2f"; goto TYx3v; CwfWF: $files[] = array("\x6e\141\x6d\x65" => $file, "\163\151\x7a\x65" => $stat["\x73\x69\x7a\145"], "\143\164\151\155\x65" => $stat["\143\x74\x69\x6d\145"]); goto DN7Ah; AZQQE: return array_reverse($files); goto BePZl; W5Be4: if (!(false !== ($file = readdir($handle)))) { goto uIdO1; } goto RHQNM; DN7Ah: p238R: goto dOthI; Zg3hX: RMNxP: goto W5Be4; RHQNM: if (!($file != "\56" && $file != "\x2e\56" && strpos($file, "\56"))) { goto p238R; } goto kcKvO; kcKvO: $stat = stat($dir . $file); goto CwfWF; GLj_K: vTsBg: goto AZQQE; dOthI: goto RMNxP; goto PMAs2; TYx3v: if (!(false != ($handle = opendir($dir)))) { goto vTsBg; } goto Zg3hX; BePZl: } protected function postDelete($filename) { goto xn8qd; gvMB8: tP2Bq: goto M8UtD; cLHgs: U55fr: goto RbHeJ; xn8qd: if (unlink("\163\161\x6c\57{$filename}") !== false) { goto U55fr; } goto OotP5; OotP5: return $this->error(); goto e5yx2; e5yx2: goto tP2Bq; goto cLHgs; RbHeJ: return $this->success(); goto gvMB8; M8UtD: } }
