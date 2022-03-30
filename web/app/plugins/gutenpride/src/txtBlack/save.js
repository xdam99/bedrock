/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save({attributes}) {
	return (
    <section class="download-app">
      <div class="download-app__content">
        <h1 class="download-app__content__title">{attributes?.title}</h1>
        <p class="download-app__content__desc">{attributes?.p}</p>
        <a class="download-app__content__link" href="#">download our app</a>
      </div>
      <div class="phone"></div>
    </section>
		
	);
}
