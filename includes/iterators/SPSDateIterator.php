<?php

/**
 * File holding the SPSDateIterator class
 *
 * @author Stephan Gambke
 * @file
 * @ingroup SemanticPageSeries
 */
if ( !defined( 'SPS_VERSION' ) ) {
	die( 'This file is part of the SemanticPageSeries extension, it is not a valid entry point.' );
}

/**
 * The SPSDateIterator class.
 *
 * @ingroup SemanticPageSeries
 */
class SPSDateIterator extends SPSIterator {

	/**
	 * @return array An array containing the names of the parameters this iterator uses.
	 */
	function getParameterNames() {
		return array(
			'start' => SPS_MANDATORY,
			'end' => SPS_OPTIONAL,
			'period' => SPS_OPTIONAL,
			'unit' => SPS_OPTIONAL
			);
	}

	/**
	 * @return an array of the values to be used in the target field of the target form
	 */
	function getValues ( &$data ){

		if ( array_key_exists( 'start', $data ) ) {

			if ( is_string( $data['start'] ) ) {

				// start date provided as a string (e.g. by datepicker input)
				$start = trim( $data['start'] );

			} else if ( is_array( $data['start']) &&
				array_key_exists( 'day', $data['start'] ) &&
				array_key_exists( 'month', $data['start'] ) &&
				array_key_exists( 'year', $data['start'] ) ) {

				// start date provided as an array (e.g. by normal date input)
				$start = trim( $data['start']['year'] ) . '/' .
					trim( $data['start']['month'] ) . '/' .
					trim( $data['start']['day'] ) ;

			} else {
				throw new SPSException( SPSUtils::buildMessage( 'spserror-date-startdatemissing' ) );
			}
		}

		if ( array_key_exists( 'end', $data ) ) {

			if ( is_string( $data['end'] ) ) {

				// end date provided as a string (e.g. by datepicker input)
				$end = trim( $data['end'] );

			} else if ( is_array( $data['end']) &&
				array_key_exists( 'day', $data['end'] ) &&
				array_key_exists( 'month', $data['end'] ) &&
				array_key_exists( 'year', $data['end'] ) ) {

				// start date provided as an array (e.g. by normal date input)
				$end = trim( $data['end']['year'] ) . '/' .
					trim( $data['end']['month'] ) . '/' .
					trim( $data['end']['day'] );

			}

			if ( is_null( $end ) || $end === '' ) {
				$end = $start;
			}
		}

		$period = SPSUtils::fromArray( $data, 'period', 1 );
		$unit   = SPSUtils::fromArray( $data, 'unit', 'day' );

		//prepare params for getDatesForRecurringEvent
		$params = array (
			'property=SomeDummyProperty',
			'start=' . $start,
			'end=' . $end,
			'period=' . $period,
			'unit=' . $unit,
			);

		$values = SMWSetRecurringEvent::getDatesForRecurringEvent($params);

		if ( $values === null ) {
			throw new SPSException( SPSUtils::buildMessage( 'spserror-date-internalerror' ) );
		}

		// if the first date did not contain a time, remove the time from all
		// generated dates
		if ( preg_match( '/.:../', $values[1][0] ) === 0 ) {
			foreach ( $values[1] as $key => $value ) {
				$values[1][$key] = trim( preg_replace( '/..:..:../', '', $value ) );
			}
		}

		return $values[1];
	}
}
