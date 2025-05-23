<?php

/**
 * @file
 * Post update functions for test module.
 */

declare(strict_types=1);

/**
 * First update, should not be run since this module's update hooks fail.
 */
function update_test_failing_post_update_first(): void {
  $execution = \Drupal::state()->get('post_update_test_execution', []);
  $execution[] = __FUNCTION__;
  \Drupal::state()->set('post_update_test_execution', $execution);
}
