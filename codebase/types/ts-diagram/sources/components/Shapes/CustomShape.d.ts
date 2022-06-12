import { VNode } from "../../../../ts-common/dom";
import { ICustomShapeConfig } from "../../../../ts-diagram";
import { BaseShape } from "./BaseShape";
export declare class CustomShape extends BaseShape {
    config: ICustomShapeConfig;
    shapes: any;
    private _properties;
    constructor(config: ICustomShapeConfig, parameters?: any);
    getMetaInfo(): {
        [key: string]: string;
    }[];
    render(): VNode;
    protected setDefaults(config: ICustomShapeConfig, defaults?: ICustomShapeConfig): ICustomShapeConfig;
    private _getMetaInfoStructure;
    private _getBaseMetaInfoStructure;
    private _getCustomContent;
    private _normalizeConfigText;
    private _getShapeFromFunction;
}
