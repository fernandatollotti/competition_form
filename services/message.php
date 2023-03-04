<?php

  session_start();

  function set_message_success( $message )
  {
    $_SESSION['message-success'] = $message;
  }

  function get_message_success()
  {
    if ( isset( $_SESSION['message-success'] ) )
      return $_SESSION['message-success'];

    return;
  }

  function set_message_error( $message )
  {
    $_SESSION['message-error'] = $message;
  }

  function get_message_error()
  {
    if ( isset( $_SESSION['message-error'] ) )
      return $_SESSION['message-error'];

    return;
  }

  function remove_message_success()
  {
    if ( isset( $_SESSION['message-success'] ) )
      unset( $_SESSION['message-success'] );
  }

  function remove_message_error()
  {
    if ( isset( $_SESSION['message-error'] ) )
      unset( $_SESSION['message-error'] );
  }

?>