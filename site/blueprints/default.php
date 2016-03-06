<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  isTitleVisible:
    label: Title Visible
    type: checkbox
    text: Should the title be display in the page along the text?
  text:
    label: Text
    type:  textarea
