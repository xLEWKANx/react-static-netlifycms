import React from 'react';
import cn from 'classnames/bind';
import PropTypes from 'prop-types';

const styles = require('components/Layout/Container.module.css');
const classNames = cn.bind(styles);

export default class Container extends React.Component {
	render() {
		const containerStyle = classNames(styles.Container, this.props.className);
		if (this.props.backgroundClass) {
			const bgClass = classNames(styles.BgContainer, this.props.backgroundClass);
			return (
				<div className={bgClass}>
					<div className={containerStyle}>{this.props.children}</div>
				</div>
			);
		} else {
			return <div className={containerStyle}>{this.props.children}</div>;
		}
	}
}

Container.propTypes = {
    backgroundClass: PropTypes.string,
    className: PropTypes.string,
    children: PropTypes.node.isRequired
};
