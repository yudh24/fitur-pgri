<?php
class Guestbook extends CI_Controller
{
function view()
{
echo '<h1>Guestbook</h1>';
$this->load->module_model('guestbook', 'GuestbookComments_model');
$comments = $this->GuestbookComments_model->find_all();
foreach ($comments as $comment) {
echo '<h2>' . $comment->author . '</h2>';
echo $comment->comment;
}
}
}