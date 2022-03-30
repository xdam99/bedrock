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
import { PlainText, useBlockProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	return (
<section class="victory-music">
      <div class="victory-music__content">
			<PlainText 
					placeholder={__('Title')}
					value={attributes?.title}
					onChange={(title) => {
					setAttributes({ title })
				}}/>
        <div class="victory-music__content__cards">
          <div class="victory-music__content__cards__card">
            <div class="card__album"></div>
            <div class="card__desc">
              <div class="card__desc__title">
								<PlainText 
									placeholder={__('Title_Artist1')}
									value={attributes?.title_artist1}
									onChange={(title_artist1) => {
									setAttributes({ title_artist1 })
								}}/>
                <PlainText 
									placeholder={__('Album1')}
									value={attributes?.album1}
									onChange={(album1) => {
									setAttributes({ album1 })
								}}/>
              </div>
							<PlainText 
									placeholder={__('Album_year1')}
									value={attributes?.album_year1}
									onChange={(album_year1) => {
									setAttributes({ album_year1 })
							}}/>
              <p class="card__desc__genre">Hip hop, Electronic</p>
            </div>
          </div>
          <div class="victory-music__content__cards__card">
          <div class="card__album"></div>
            <div class="card__desc">
              <div class="card__desc__title">
							<PlainText 
									placeholder={__('Title_Artists2')}
									value={attributes?.title_artist2}
									onChange={(title_artist2) => {
									setAttributes({ title_artist2 })
									}}/>
								<PlainText 
									placeholder={__('Album2')}
									value={attributes?.album2}
									onChange={(album2) => {
									setAttributes({ album2 })
								}}/>
              </div>
							<PlainText 
									placeholder={__('Album_year2')}
									value={attributes?.album_year2}
									onChange={(album_year2) => {
									setAttributes({ album_year2 })
							}}/>
              <p class="card__desc__genre">Hip hop, Electronic</p>
            </div>
          </div>
          <div class="victory-music__content__cards__card">
          <div class="card__album">
							<PlainText 
									placeholder={__('Title_Artist3')}
									value={attributes?.title_artist3}
									onChange={(title_artist3) => {
										setAttributes({ title_artist3 })
									}}/>
								<PlainText 
									placeholder={__('Album3')}
									value={attributes?.album3}
									onChange={(album3) => {
									setAttributes({ album3 })
								}}/>
              </div>
							<PlainText 
									placeholder={__('Album_year3')}
									value={attributes?.album_year3}
									onChange={(album_year3) => {
									setAttributes({ album_year3 })
							}}/>
              <p class="card__desc__genre">Hip hop, Electronic</p>
            </div>
          </div>
        </div>
    </section>
	);
}
