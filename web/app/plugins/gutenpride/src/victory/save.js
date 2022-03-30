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
    <section class="victory-music">
      <div class="victory-music__content">
        <h1 class="victory-music__content__title">{attributes?.title}</h1>
        <div class="victory-music__content__cards">
          <div class="victory-music__content__cards__card">
            <div class="card__album"></div>
            <div class="card__desc">
              <div class="card__desc__title">
                <h2>{attributes?.title_artist1}</h2>
                <h3>{attributes?.album1}</h3>
              </div>
              <p class="card__desc__year">{attributes?.album_year1}</p>
              <p class="card__desc__genre">Hip hop, Electronic</p>
            </div>
          </div>
          <div class="victory-music__content__cards__card">
          <div class="card__album"></div>
            <div class="card__desc">
              <div class="card__desc__title">
                <h2>{attributes?.title_artist2}</h2>
                <h3>{attributes?.album2}</h3>
              </div>
              <p class="card__desc__year">{attributes?.album_year2}</p>
              <p class="card__desc__genre">Hip hop, Electronic</p>
            </div>
          </div>
          <div class="victory-music__content__cards__card">
          <div class="card__album"></div>
            <div class="card__desc">
              <div class="card__desc__title">
                <h2>{attributes?.title_artist3}</h2>
                <h3>{attributes?.album3}</h3>
              </div>
              <p class="card__desc__year">{attributes?.album_year3}</p>
              <p class="card__desc__genre">Hip hop, Electronic</p>
            </div>
          </div>
          </div>
        </div>
    </section>
		
	);
}
