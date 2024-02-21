<?php

declare(strict_types = 1);

namespace Drupal\drupaleasy_repositories\Plugin\DrupaleasyRepositories;

use Drupal\drupaleasy_repositories\DrupaleasyRepositoriesPluginBase;

/**
 * Plugin implementation of the drupaleasy_repositories.
 *
 * @DrupaleasyRepositories(
 *   id = "yml_remote",
 *   label = @Translation("Yml remote"),
 *   description = @Translation("Remote .yml that includes repo data.")
 * )
 */
final class YmlRemote extends DrupaleasyRepositoriesPluginBase {

  /**
   * {@inheritdoc}
   */
  public function validate(string $uri): bool
  {
  }

  /**
   * {@inheritdoc}
   */
  public function validateHelpText(): string
  {
  }

  /**
   * {@inheritdoc}
   */
  public function getRepo(string $uri): array {

  }
}
