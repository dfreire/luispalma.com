<?php if(!defined('KIRBY')) exit ?>

title: Text
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  isTitleVisible:
    label: Title Visible
    type: checkbox
    text: Should the title be visible?
  text:
    label: Text
    type:  textarea
